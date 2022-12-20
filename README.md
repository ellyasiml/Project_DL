# iHeart
This project is made for 2022 Deep Learning class final project at Udayana University
Team Member
- 1905551009 | I Gusti Ayu Mirah Agniati
- 1905551012 | Lidya Yanti	     
- 1905551048 | Luckystia Mafasani Ulfa	
- 1905551055 | Ellyas Immanuel Sinaga	
- 1905551057 | Kevin Salim Yudistira

# DESKRIPSI WEBSITE
iHeart adalah aplikasi web yang membantu staf medis untuk menentukan apakah pasien memiliki peluang tinggi terkena serangan jantung atau penyakit jantung. Selain itu aplikasi iHeart juga mempunyai fitur tambahan pendetaksi penyakit stroke. 

# ARSITEKTUR WEBSITE


# DATASET
Dataset yang di buat dalam tugas Deep Learning ini mengambil dua data yag berbeda yang dimana menggunakan dataset penyakit jantung dan dataset penyakit stroke. masing-masaing data diambil melalui internet yang dimana Dataset penyakit jantung diambil dari Kaggle, berisi 13 atribut + 1 target label. *gender, sex, age, cholesterol, glucose, ECG result, BP, etc* dengan link  (https://www.kaggle.com/datasets/rashikrahmanpritom/heart-attack-analysis-prediction-dataset?select=heart.csv) dan dataset penyakit stroke diambil dari Kaggle, berisi11 atribut + 1 taeget label *gender, age, hypertension, heart_disease, ever_married, work_type, Residence_type, avg_glucose_level, bmi, smoking_status, stroke* dengan link (https://www.kaggle.com/datasets/fedesoriano/stroke-prediction-dataset)

# Dataset Penyakit Jantung
| No. | Nama Kolom | Keterangan |
|-----| :--------: |------------|
|  1. | `age`      | Usia pasien                  |
|  2. | `sex`      | Jenis kelamin pasien         |
|  3. | `cp`       | Jenis nyeri dada (Angina)    |
|     |            | - Value 1: typical angina    |
|     |            | - Value 2: atypical angina   |
|     |            | - Value 3: non-anginal pain  |
|     |            | - Value 4: asymptomatic      |
|  4. | `trtbps`   | Tekanan darah (mm Hg)        |
|  5. | `chol`     | Kolestrol (mg/dl) menggunakan sensor BMI    |
|  6. | `fbs`      | fasting blood sugar (gula darah > 120 mg/dl)|
|     |            | (1 = true; 0 = false)        |
|  7. | `restecg`  | Hasil resting electrocardiographic          |
|  8. | `thalachh` | Detak jantung maksimum tercapai             |
|  9. | `exng`     | Nyeri (1 = yes; 0 = no)      |
| 10. | `oldpeak`  | Previous peak                |
| 11. | `slp`      | Slope of the Peak Exercise ST Segment       |
| 12. | `caa`      | Jumlah Major Vessels (0-3)   |
| 13. | `thall`    | Talasemia                    |


# Dataset Stroke
| No. | Nama Kolom | Keterangan |
|-----| :--------: |------------|
|  1. | `id`            | Unique identifier                       |
|  2. | `gender`        | Jenis kelamin                           |
|  3. | `age`           | Usia pasien                             |
|  4. | `hypertension`  | Hipertensi (1 = yes; 0 = no)            |
|  5. | `heart_disease` | Penyakit jantung (1 = yes; 0 = no)      |
|  6. | `ever_married`  | Pernah menikah (yes or no)              |
|  7. | `work_type`     | "children", "Govt_jov", "never_worked", |
|     |                 | "private" or "self-employed"            |
|  8. | `residence_type`|"rural" or "urban"                       |
|  9. | `avg_glucose_level` | Kadar glukosa rata-rata dalam darah |
|  10. | `bmi`          | Indeks Masa Tubuh                       |
|  11. | `smoking_status` | "formerly smoked", "never smoked",    |
|      |                |"smokes" or "Unknown"                    |

# ALGORITMA
Algoritma yang digunakan dalam Aplikasi iHeart yaitu Artificial Neural Network(ANN)
Metode Artificial Neural Network(ANN) merupakan suatu pendekatan model kecerdasan yang diilhami dari struktur otak manusia dan kemudian diimplementasikan menggunakan program komputer yang mampu menyelesaikan sejumlah proses perhitungan selama proses learning berlangsung. Artificial Neural Network cocok disambungan dengan dataset yang disiapkan, karna ANN ini memiliki kemampuan yang luar biasa untuk mendapatkan informasi dari data yang rumit atau tidak tepat sehingga permasalahan yang tidak terstruktur dan sulit didefinisikan dapat diatasi. Namun, Artificial Neural Network juga memiliki kelemahan dimana adanya ketergantungan terhadap hardware dan tidak efektif jika digunakan untuk melakukan operasi-operasi numerik dengan presisi tinggi dan membutuhkan pelatihan dalam waktu yang lama jika jumlah data yang diolah besar.


# MODEL DEEP LEARNING
1. MODEL HEART
- MODEL 1
Model 1 terdiri dari total 4 lapisan.
1.	Input layer dengan node 256
2.	2 hidden layer dengan jumlah node berturut-turut 128 dan 64.
3.	Output layer menggunakan aktivasi sigmoid.
Model di-compile dengan loss binary_crossentropy dan optimizer adam dengan learning rate 0.0001. Arsitektur lengkapnya dapat dilihat pada gambar dibawah.
![image](https://user-images.githubusercontent.com/90238361/208729395-ebbdbbbd-0887-4c23-99ab-7d4e59dec1ac.png)

Hasil training model 1 dapat dilihat pada gambar di bawah.

![image](https://user-images.githubusercontent.com/90238361/208729452-a1da90a5-bcdc-4215-809c-ef9082ee55d9.png)

![image](https://user-images.githubusercontent.com/90238361/208729479-84a9fda8-84e1-49a2-9b0a-7483201b8183.png)
Model mendapatkan accuracy tertinggi 0.82 dan loss 0.38 dengan val_accuracy 0.84 serta val_loss 0.32.

Evaluasi dilakukan dengan menggunakan test set yang sudah disiapkan. Hasilnya dapat dilihat pada gambar dibawah.
![image](https://user-images.githubusercontent.com/90238361/208729594-8683c94a-3cc5-454a-8452-ac66d50a5642.png)
Model 1 mendapat akurasi sebesar 87%, dan karena dataset yang digunakan merupakan dataset kesehatan maka recall label positif (1) mendapat prioritas tinggi dalam evaluasi model. Recall label 1 mendapat nilai 0.81.
