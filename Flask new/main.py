import os
from flask import Flask, request
import tensorflow as tf
import pandas as pd
from sklearn.preprocessing import StandardScaler, LabelEncoder
import numpy as np
from flask_cors import CORS


class HeartInferer:
    model_heart = tf.keras.models.load_model('./models/heart_model.h5')
    df = pd.read_csv("heart.csv")
    cat_columns = ['sex', 'cp', 'fbs', 'restecg',
                   'exng', 'slp', 'caa', 'thall', 'output']
    df[cat_columns] = df[cat_columns].astype(str)
    df = df.drop(columns=['output'])
    df2 = pd.get_dummies(df, drop_first=True)

    sc = StandardScaler()
    # This is bad btw, yg one-hot juga ter standard scaler
    sc.fit_transform(df2)

    def transform_row(self, age, trtbps, chol, thalachh, oldpeak, sex, cp, fbs, restecg, exng, slp, caa, thall):
        # yg di onehot perlu lebih lanjut: cp, restecg, slp, caa, thall
        # cp
        onehot_cp = [0, 0, 0]
        if cp == 3:
            onehot_cp[2] = 1
        elif cp == 2:
            onehot_cp[1] = 1
        elif cp == 1:
            onehot_cp[0] = 1

        # restecg
        onehot_restecg = [0, 0]
        if restecg == 2:
            onehot_restecg[1] = 1
        elif restecg == 1:
            onehot_restecg[0] = 1

        # slp
        onehot_slp = [0, 0]
        if slp == 2:
            onehot_slp[1] = 1
        elif slp == 1:
            onehot_slp[0] = 1

        # caa
        onehot_caa = [0, 0, 0, 0]
        if caa == 4:
            onehot_caa[3] = 1
        elif caa == 3:
            onehot_caa[2] = 1
        elif caa == 2:
            onehot_caa[1] = 1
        elif caa == 1:
            onehot_caa[0] = 1

        # thall
        onehot_thall = [0, 0, 0]
        if thall == 2:
            onehot_thall[1] = 1
        elif thall == 1:
            onehot_thall[0] = 1

        row = [
            age,
            trtbps,
            chol,
            thalachh,
            oldpeak,
            sex,
            *onehot_cp,
            fbs,
            *onehot_restecg,
            exng,
            *onehot_slp,
            *onehot_caa,
            *onehot_thall
        ]

        return self.sc.transform(np.array([row]))

    def infer(self, row):
        return self.model_heart.predict(row)


class StrokeInferer:
    model_stroke = tf.keras.models.load_model('./models/stroke_model2.h5')
    stroke_df = pd.read_csv("stroke.csv")
    stroke_cat_columns = ['gender', 'hypertension', 'heart_disease',
                          'ever_married', 'work_type', 'Residence_type', 'smoking_status', 'stroke']
    stroke_df[stroke_cat_columns] = stroke_df[stroke_cat_columns].astype(str)
    stroke_df['age'] = stroke_df['age'].astype(int)
    stroke_df = stroke_df.dropna()

    df_stroke_onehot = pd.get_dummies(
        stroke_df, drop_first=True)  # One-hot encode

    x_stroke = df_stroke_onehot.drop(columns=['id', 'stroke_1'])

    sc_stroke = StandardScaler()
    sc_stroke.fit_transform(x_stroke)

    def transform_row(self, gender, age, hypertension, heart_disease, ever_married, work_type, Residence_type, avg_glucose_level, bmi, smoking_status):
        df1 = pd.DataFrame({
            'id': [-1],
            'gender': [gender],
            'age': [age],
            'hypertension': [hypertension],
            'heart_disease': [heart_disease],
            'ever_married': [ever_married],
            'work_type': [work_type],
            'Residence_type': [Residence_type],
            'avg_glucose_level': [avg_glucose_level],
            'bmi': [bmi],
            'smoking_status': [smoking_status],
            'stroke': [-1]
        })
        df1[self.stroke_cat_columns] = df1[self.stroke_cat_columns].astype(str)
        df1['age'] = df1['age'].astype(np.int64)
        df1['avg_glucose_level'] = df1['avg_glucose_level'].astype(np.float64)
        df1['bmi'] = df1['bmi'].astype(np.float64)

        df2 = pd.get_dummies(df1)

        innn_1 = df2.reindex(columns=self.df_stroke_onehot.columns, fill_value=0).drop(
            columns=['id', 'stroke_1'])

        innn_2 = self.sc_stroke.transform(innn_1)
        return innn_2

    def infer(self, row):
        return self.model_stroke.predict(row)


app = Flask(__name__)
CORS(app)

heartInferer = HeartInferer()
strokeInferer = StrokeInferer()


@app.route('/', methods=['GET'])
def hi():
    return "world"


@app.route('/heart', methods=['POST'])
def heart_infer():
    age = request.form.get('age')
    trtbps = request.form.get('trtbps')
    chol = request.form.get('chol')
    thalachh = request.form.get('thalachh')
    oldpeak = request.form.get('oldpeak')
    sex = request.form.get('sex')
    cp = request.form.get('cp')
    fbs = request.form.get('fbs')
    restecg = request.form.get('restecg')
    exng = request.form.get('exng')
    slp = request.form.get('slp')
    caa = request.form.get('caa')
    thall = request.form.get('thall')

    tf_row = heartInferer.transform_row(
        age, trtbps, chol, thalachh, oldpeak, sex, cp, fbs, restecg, exng, slp, caa, thall)

    res = heartInferer.infer(tf_row)[0][0]
    _predicted = 0 if res < 0.5 else 1
    _confidence = 1-res if _predicted == 0 else res.item()

    return {
        "value": res.item(),
        "confidence": _confidence,
        "predicted": _predicted,
    }

@app.route('/stroke', methods=['POST'])
def stroke_infer():
    # gender, age,hypertension, heart_disease,ever_married,work_type,Residence_type, avg_glucose_level,bmi,smoking_status
    gender = request.form.get('gender')
    age = request.form.get('age')
    hypertension = request.form.get('hypertension')
    heart_disease = request.form.get('heart_disease')
    ever_married = request.form.get('ever_married')
    work_type = request.form.get('work_type')
    Residence_type = request.form.get('Residence_type')
    avg_glucose_level = request.form.get('avg_glucose_level')
    bmi = request.form.get('bmi')
    smoking_status = request.form.get('smoking_status')

    tf_row = strokeInferer.transform_row(gender, age, hypertension, heart_disease,
                                         ever_married, work_type, Residence_type, avg_glucose_level, bmi, smoking_status)
                                      
    res = strokeInferer.infer(tf_row)[0][0]
    _predicted = 0 if res < 0.5 else 1
    _confidence = 1-res if _predicted == 0 else res.item()

    return {
        "value": res.item(),
        "confidence": _confidence,
        "predicted": _predicted,
    }


if __name__ == '__main__':
    _port = os.environ.get("PORT", 8082)
    app.run(debug=True, port=_port, host="0.0.0.0")
