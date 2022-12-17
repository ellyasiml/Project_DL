import tensorflow as tf
import pandas as pd
from sklearn.preprocessing import StandardScaler
import numpy as np

class HeartInferer:
  model_heart = tf.keras.models.load_model('./models/heart_model.h5')
  df = pd.read_csv("h.csv")
  cat_columns = ['sex', 'cp', 'fbs', 'restecg', 'exng', 'slp', 'caa', 'thall', 'output']
  df[cat_columns] = df[cat_columns].astype(str)
  df = df.drop(columns=['output'])
  df2 = pd.get_dummies(df, drop_first=True)

  sc = StandardScaler()
  sc.fit_transform(df2) # This is bad btw, yg one-hot juga ter standard scaler

  def transform_row(self, age, trtbps, chol, thalachh, oldpeak, sex, cp, fbs, restecg, exng, slp, caa, thall):
    # yg di onehot perlu lebih lanjut: cp, restecg, slp, caa, thall
    # cp
    onehot_cp = [0,0,0]
    if cp == 3:
        onehot_cp[2] = 1
    elif cp == 2:
        onehot_cp[1] = 1
    elif cp == 1:
        onehot_cp[0] = 1
        
    #restecg
    onehot_restecg = [0,0]
    if restecg == 2:
        onehot_restecg[1] = 1
    elif restecg == 1:
        onehot_restecg[0] = 1
        
    #slp
    onehot_slp = [0,0]
    if slp == 2:
        onehot_slp[1] = 1
    elif slp == 1:
        onehot_slp[0] = 1
        
    #caa
    onehot_caa = [0,0,0,0]
    if caa == 4:
        onehot_caa[3] = 1
    elif caa == 3:
        onehot_caa[2] = 1
    elif caa == 2:
        onehot_caa[1] = 1
    elif caa == 1:
        onehot_caa[0] = 1
        
    #thall
    onehot_thall = [0,0,0]
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


# 'age', 'trtbps', 'chol', 'thalachh', 'oldpeak', 'sex_1', 'cp_1', 'cp_2',
#        'cp_3', 'fbs_1', 'restecg_1', 'restecg_2', 'exng_1', 'slp_1', 'slp_2',
#        'caa_1', 'caa_2', 'caa_3', 'caa_4', 'thall_1', 'thall_2', 'thall_3'


from flask import Flask, request

app = Flask(__name__)

print("halo")

heartInferer = HeartInferer()

@app.route('/heart', methods=['POST'])
def hello():
  # age, trtbps, chol, thalachh, oldpeak, sex, cp, fbs, restecg, exng, slp, caa, thall
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

  tf_row = heartInferer.transform_row(age, trtbps, chol, thalachh, oldpeak, sex, cp, fbs, restecg, exng, slp, caa, thall)

  res = heartInferer.infer(tf_row)[0][0]
  print(res)
  return {
    "predicted": res.item()
  }

import os
if __name__ == '__main__':
    app.run(debug=True, port=8082, host="0.0.0.0")
