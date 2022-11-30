import pandas as pd
from sklearn.metrics import accuracy_score
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler

import tensorflow as tf
from tensorflow.keras.models import Sequential
from tensorflow.keras.layers import Dense, Dropout
from tensorflow.keras.optimizers import Adam
from tensorflow.keras.losses import BinaryCrossentropy

import matplotlib.pyplot as plt

df = pd.read_csv("heart.csv")

cat_columns = ['sex', 'cp', 'fbs', 'restecg', 'exng', 'slp', 'caa', 'thall', 'output']
df[cat_columns] = df[cat_columns].astype(str)

df = pd.get_dummies(df, drop_first=True)

x = df.iloc[:, 0:-1].values
y = df.iloc[:, -1].values

sc = StandardScaler()
x = sc.fit_transform(x)

x_train, x_test, y_train, y_test = train_test_split(x, y, test_size= 0.20,random_state= 42)

model = Sequential()
model.add(Dense(256,activation='relu',input_shape=(22,)))
model.add(Dropout(0.5)) 
model.add(Dense(128,activation='relu'))
model.add(Dropout(0.5)) 
model.add(Dense(64,activation='relu'))
model.add(Dropout(0.5))
model.add(Dense(1,activation = 'sigmoid'))

model.compile(loss="binary_crossentropy", optimizer=Adam(learning_rate=0.0001), metrics=['accuracy'])

from keras.callbacks import EarlyStopping
cb = EarlyStopping(
    monitor='accuracy',
    min_delta=0.001,
    patience=100,
    verbose=1,
    mode='auto')

model.fit(x_train,y_train,epochs=2000,batch_size=10000,validation_split=0.10,callbacks=cb)