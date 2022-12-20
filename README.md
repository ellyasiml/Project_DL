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
1. Input layer dengan node 256
2. 2 hidden layer dengan jumlah node berturut-turut 128 dan 64.
3. Output layer menggunakan aktivasi sigmoid.
Model di-compile dengan loss binary_crossentropy dan optimizer adam dengan learning rate 0.0001. Arsitektur lengkapnya dapat dilihat pada gambar dibawah.
![image](https://user-images.githubusercontent.com/90238361/208726858-a383d392-679e-4352-8679-7d4848f430ad.png)

Hasil training model 1 dapat dilihat pada gambar di bawah.
![image](https://user-images.githubusercontent.com/90238361/208727006-468ff89a-cc4a-4cbd-bc84-28973bf45914.png)
![image](https://user-images.githubusercontent.com/90238361/208727028-411141a5-53af-48e9-a35b-4b1f4a31a0db.png)

Model mendapatkan accuracy tertinggi 0.82 dan loss 0.38 dengan val_accuracy 0.84 serta val_loss 0.32.

Evaluasi dilakukan dengan menggunakan test set yang sudah disiapkan. Hasilnya dapat dilihat pada gambar dibawah.
![image](https://user-images.githubusercontent.com/90238361/208727110-2077aaaf-94f2-4b68-927d-140c4c54c226.png)

Model 1 mendapat akurasi sebesar 87%, dan karena dataset yang digunakan merupakan dataset kesehatan maka recall label positif (1) mendapat prioritas tinggi dalam evaluasi model. Recall label 1 mendapat nilai 0.81.

- Model 2
Model 2 terdiri dari total 4 lapisan. 
1. Input layer dengan node 64
2. 2 hidden layer dengan jumlah node berturut-turut 32 dan 32.
3. Output layer menggunakan aktivasi sigmoid.
Model di-compile dengan loss binary_crossentropy dan optimizer adam dengan learning rate 0.0001. Arsitektur lengkapnya dapat dilihat pada gambar dibawah.
![image](https://user-images.githubusercontent.com/90238361/208727246-93a06634-b6e9-4997-8fc9-8d7cbcada5ef.png)


Hasil training model 2 dapat dilihat pada gambar di bawah.

Model 2 mendapatkan accuracy tertinggi 0.89 dan loss 0.26 dengan val_accuracy 0.88 serta val_loss 0.30.
![image](https://user-images.githubusercontent.com/90238361/208727281-400575a9-cebd-4a04-a6bb-1f2ba63a8a65.png)
![image](https://user-images.githubusercontent.com/90238361/208727306-1d5fa598-a700-477c-9026-535e09dc268a.png)

Evaluasi dilakukan dengan menggunakan test set yang sudah disiapkan. Hasilnya dapat dilihat pada gambar dibawah.
![image](https://user-images.githubusercontent.com/90238361/208727346-658af1f4-fa43-4846-a620-abcd5fc89a49.png)

Model 2 mendapat skor yang lebih baik dari model 1 dengan akurasi sebesar 87% dan recall label positif 0.84.


- Model 3
Model 3 terdiri dari total 5 lapisan. 
1. Input layer dengan node 128
2. 3 hidden layer dengan jumlah node berturut-turut 64, 32 dan 32.
3. Output layer menggunakan aktivasi sigmoid.

Model di-compile dengan loss binary_crossentropy dan optimizer adam dengan learning rate 0.00001. Arsitektur lengkapnya dapat dilihat pada gambar dibawah.
![image](https://user-images.githubusercontent.com/90238361/208727481-f8649ad4-e50c-4c75-8871-a2748195a1ee.png)

Hasil training model 3 dapat dilihat pada gambar di bawah.
![image](https://user-images.githubusercontent.com/90238361/208727507-499d6703-84b9-46c6-ac11-24b3cb5aced9.png)
![image](https://user-images.githubusercontent.com/90238361/208727537-d81eb8b3-87bd-4ee8-b8ab-eb94cdf3f870.png)

Model 3 mendapatkan accuracy tertinggi 0.96 dan loss 0.08 dengan val_accuracy 0.88 serta val_loss akhir 0.46.

Evaluasi dilakukan dengan menggunakan test set yang sudah disiapkan. Hasilnya dapat dilihat pada gambar dibawah.
![image](https://user-images.githubusercontent.com/90238361/208727577-66176eef-aa01-4069-b4ce-c73990ed4e79.png)

Model 3 mendapat akurasi yang lebih rendah dari model 2, yaitu 0.85. Namun mendapat recall label 1 yang lebih baik yaitu 0.88

Hasil evaluasi: Dengan mempertimbangkan recall label positif sebagai prioritas utama dalam mengevaluasi model, diputuskan untuk menggunakan model 3.


2. MODEL STROKE
- Model 1
Model 1 terdiri dari total 7 lapisan. 
1. Input layer dengan node 128
2. 5 hidden layer dengan jumlah node berturut-turut 64, 32, 16, 8, dan 8.
3. Output layer menggunakan aktivasi sigmoid.
Model di-compile dengan loss binary_crossentropy dan optimizer adam dengan learning rate 0.00005. Arsitektur lengkapnya dapat dilihat pada gambar dibawah.
![image](https://user-images.githubusercontent.com/90238361/208728137-6122b7c1-be1a-42c2-a324-a4f67c19bcdf.png)

Hasil training model 1 dapat dilihat pada gambar di bawah.
![image](https://user-images.githubusercontent.com/90238361/208728182-480d7901-796d-46c4-a8d4-f2c67b412713.png)
![image](https://user-images.githubusercontent.com/90238361/208728210-ad5bf674-3e89-41ba-86aa-7b0eae00837a.png)

Model 1 mendapatkan accuracy tertinggi 0.84 dan loss 0.36 dengan val_accuracy 0.97 serta val_loss 0.29.

Evaluasi dilakukan dengan menggunakan test set yang sudah disiapkan. Hasilnya dapat dilihat pada gambar dibawah.
![image](https://user-images.githubusercontent.com/90238361/208728299-be71f136-8b9b-4f07-9760-704fb72e6688.png)
![image](https://user-images.githubusercontent.com/90238361/208728320-31729d5f-b0b2-4376-bfeb-d4aaf371f4a5.png)

Model 1 mendapat akurasi sebesar 77%, dan karena dataset yang digunakan merupakan dataset kesehatan maka recall label positif (1) mendapat prioritas tinggi dalam evaluasi model. Recall label 1 mendapat nilai 0.72.

- Model 2
Model 2 terdiri dari total 8 lapisan. 
1. Input layer dengan node 128
2. 5 hidden layer dengan jumlah node berturut-turut 64, 32, 16, 8, 4, dan 4.
3. Output layer menggunakan aktivasi sigmoid.
Model di-compile dengan loss binary_crossentropy dan optimizer adam dengan learning rate 0.00005. Arsitektur lengkapnya dapat dilihat pada gambar dibawah.
![image](https://user-images.githubusercontent.com/90238361/208728439-2d139785-50c2-4aa2-a744-a6b54082a06c.png)

Hasil training model 2 dapat dilihat pada gambar di bawah.
![image](https://user-images.githubusercontent.com/90238361/208728485-4cfb2f8a-5bfb-464c-8172-6a7e1eadd6e4.png)
![image](https://user-images.githubusercontent.com/90238361/208728512-e943c0e1-2bc9-49d4-a34e-aff7dc7af07d.png)

Model 2 mendapatkan accuracy tertinggi 0.69 dan loss 0.56 dengan val_accuracy 0.77 serta val_loss 0.58.

Evaluasi dilakukan dengan menggunakan test set yang sudah disiapkan. Hasilnya dapat dilihat pada gambar dibawah.
![image](https://user-images.githubusercontent.com/90238361/208728568-cf6cfe62-d26f-446c-9045-6761bce7e1e4.png)
![image](https://user-images.githubusercontent.com/90238361/208728588-f03b7e2c-bb02-45cb-8232-e3df23c9a0f1.png)

Model 2 mendapat akurasi sebesar 81% yang lebih baik daripada model 1, namun recall label positif (1) mendapat skor yang lebih rendah dari model 1 yaitu 0.68.

Hasil evaluasi: Dengan mempertimbangkan recall label positif sebagai prioritas utama dalam mengevaluasi model, diputuskan untuk menggunakan model 1.


# PROSES TREANING DAN TESTING
Dataset yang diperoleh melalui tahap preprocessing, seperti one-hot encoding menggunakan get_dummies, dan juga feature scaling menggunakan StandardScaler. Khusus pada dataset Stroke, terjadi ketidak seimbangan pada label sehingga dilakukan oversampling pada train set. Pada dataset stroke juga terdapat sekitar 201 baris yang memiliki value null pada kolom BMI, maka baris-baris tersebut dibuang. Setelah melalui tahap preprocessing, maka dilakukan proses training. Proses training dimulai dengan memisahkan train set dengan test set. Train set 80% dan test set 20%.

Pada model heart, training dilakukan dengan epoch 2000 dan validation split 0.1. Diterapkan pula EarlyStopping menggunakan parameter accuracy dengan patience 100.  Proses fitting terhenti pada Epoch ke-962 dengan accuracy tertinggi sekitar 0.96 dan val_accuracy tertinggi sekitar 0.88. Setelah melalui proses fitting, model diuji menggunakan test set yang telah disiapkan dan memperoleh akurasi sebesar 85% dengan recall label positif (1) sebesar 0.88.

Pada model stroke, training dilakukan dengan epoch 5000 dan validation split 0.1. Diterapkan pula EarlyStopping menggunakan parameter accuracy dengan patience 50.  Proses fitting terhenti pada Epoch ke-1346 dengan accuracy tertinggi sekitar 0.84, dan val_accuracy tertinggi sekitar 0.97. Setelah melalui proses fitting, model diuji menggunakan test set yang telah disiapkan dan memperoleh akurasi sebesar 77% dengan recall label positif (1) sebesar 0.72.

# ANALISIS MODEL DAN HASIL EVALUASI

# CARA MENJALANKAN APLIKASI
1. Masuk ke halaman utama website iHeart 
2. pilih akan melakukan analisa penyakit jantung ataupun stroke
![image](https://user-images.githubusercontent.com/90238361/208703798-4c0a3fb4-6cec-4cd8-b11d-273e765a2b09.png)
3. lakukan pengisian data pada form di halaman website iHeart
![image](https://user-images.githubusercontent.com/90238361/208706274-3f521fdb-5fb4-463f-88c1-3304d525017a.png)
![image](https://user-images.githubusercontent.com/90238361/208705016-3e7b0adf-53ec-4612-bc50-cf89de4ac47e.png)
![image](https://user-images.githubusercontent.com/90238361/208705206-56b72dc2-5a2c-4548-9a74-59cd65af1904.png)
4. setelah mengisi form data lalu klik submit
![image](https://user-images.githubusercontent.com/90238361/208705463-1bedf317-f9a1-4f54-b7f6-fe0a1702104f.png)
5. setelah melakukan submit, hasil output akan menunjukkan apakah pasien berpeluang memiliki penyakit jantung atau tidak sesuai dengan data yang telah di innputkan
![image](https://user-images.githubusercontent.com/90238361/208706471-e20b8249-bc96-45ab-8882-b364805757e3.png)


