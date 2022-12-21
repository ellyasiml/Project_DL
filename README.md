# iHeart
This project is made for 2022 Deep Learning class final project at Udayana University
Team Member
- 1905551009 | I Gusti Ayu Mirah Agniati
- 1905551012 | Lidya Yanti	     
- 1905551048 | Luckystia Mafasani Ulfa	
- 1905551055 | Ellyas Immanuel Sinaga	
- 1905551057 | Kevin Salim Yudistira


## Table of Contents
1. [Deskripsi Website](#deskripsiwebsite)
2. [Cara Menjalankan Aplikasi](#cara)
3. [Arsitektur Website](#arsitektur)
4. [Dataset](#dataset)
   *[Dataset Penyakit Jantung](#dtjt)
   *[Dataset Stroke](#dtstrk)

# DESKRIPSI WEBSITE <div id='deskripsiwebsite'/> 
iHeart adalah aplikasi yang berbasis website yang membantu staf medis untuk menentukan apakah pasien memiliki peluang tinggi terkena serangan jantung atau penyakit jantung. Selain itu aplikasi iHeart juga mempunyai fitur tambahan pendetaksi penyakit stroke. 

# CARA MENJALANKAN APLIKASI <div id='cara'/> 
1.	Masuk ke halaman utama aplikasi iHeart
2.	Pilih akan melakukan prediksi penyakit jantung ataupun penyakit stroke
![image](https://user-images.githubusercontent.com/90238361/208801128-63239a2f-a199-4389-ac3f-e7d579210c30.png)

3.	Selanjutnya, isi semua data pada form di halaman aplikasi
4.	Setelah selesai mengisi data klik tombol submit untuk mendapatkan hasil prediksi
![image](https://user-images.githubusercontent.com/90238361/208801326-03a6bff9-a0c4-442d-940a-d2dd7ee528c0.png)

5.	Hasil output prediksi berupa diagnosa apakah pasien memilki kemungkinan penyakit jantung atau tidak.
![image](https://user-images.githubusercontent.com/90238361/208801392-2b4bcb1a-709b-4f55-bebe-fba7cb85deb4.png)


# ARSITEKTUR WEBSITE <div id='arsitektur'/> 

![Arsitektur](https://user-images.githubusercontent.com/90238361/208791263-92634ebc-eb5a-4539-8faa-d480003eddee.jpg)

Gambar di atas merupakan arsitektur dari aplikasi berbasis website iHeart. 
Model pada website iHeart dibuatkan Flask API dan di deploy pada Google app engine. Selanjutnya Website yang di buat menggunakan Laravel dibuatkan docker imagenya, kemudian dideploy menggunakan Google Cloud Run. Ketika tombol submit pada website diklik, website akan memanggil fungsi pada Google App Engine untuk melakukan prediksi dan hasilnya akan dikirim kembali ke website. Hasil prediksi yang dihasilkan yaitu memprediksi penyakit jantung ataupun penyakit stroke berdasarkan dataset yang digunakan.

# DATASET
Dataset yang di buat dalam tugas Deep Learning ini mengambil dua data yag berbeda yang dimana menggunakan dataset penyakit jantung dan dataset penyakit stroke. masing-masaing data diambil melalui internet yang dimana Dataset penyakit jantung diambil dari Kaggle, berisi 13 atribut + 1 target label. *gender, sex, age, cholesterol, glucose, ECG result, BP, etc* dengan link  (https://www.kaggle.com/datasets/rashikrahmanpritom/heart-attack-analysis-prediction-dataset?select=heart.csv) dan dataset penyakit stroke diambil dari Kaggle, berisi11 atribut + 1 taeget label *gender, age, hypertension, heart_disease, ever_married, work_type, Residence_type, avg_glucose_level, bmi, smoking_status, stroke* dengan link (https://www.kaggle.com/datasets/fedesoriano/stroke-prediction-dataset)

## Dataset Penyakit Jantung
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


## Dataset Stroke
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

# PROSES TRAINING DAN TESTING
Dataset yang diperoleh melalui tahap preprocessing, seperti one-hot encoding menggunakan get_dummies, dan juga feature scaling menggunakan StandardScaler. Khusus pada dataset Stroke, terjadi ketidak seimbangan pada label sehingga dilakukan oversampling pada train set. Pada dataset stroke juga terdapat sekitar 201 baris yang memiliki value null pada kolom BMI, maka baris-baris tersebut dibuang. Setelah melalui tahap preprocessing, maka dilakukan proses training. Proses training dimulai dengan memisahkan train set dengan test set. Train set 80% dan test set 20%.

Pada model heart, training dilakukan dengan epoch 2000 dan validation split 0.1. Diterapkan pula EarlyStopping menggunakan parameter accuracy dengan patience 100.  Proses fitting terhenti pada Epoch ke-962 dengan accuracy tertinggi sekitar 0.96 dan val_accuracy tertinggi sekitar 0.88. Setelah melalui proses fitting, model diuji menggunakan test set yang telah disiapkan dan memperoleh akurasi sebesar 85% dengan recall label positif (1) sebesar 0.88.

Pada model stroke, training dilakukan dengan epoch 5000 dan validation split 0.1. Diterapkan pula EarlyStopping menggunakan parameter accuracy dengan patience 50.  Proses fitting terhenti pada Epoch ke-1346 dengan accuracy tertinggi sekitar 0.84, dan val_accuracy tertinggi sekitar 0.97. Setelah melalui proses fitting, model diuji menggunakan test set yang telah disiapkan dan memperoleh akurasi sebesar 77% dengan recall label positif (1) sebesar 0.72.


# MODEL DEEP LEARNING
>## 1. Model Heart
>>### - Model 1
>>
>>Model 1 terdiri dari total 4 lapisan.
>>1.	Input layer dengan node 256
>>2.	2 hidden layer dengan jumlah node berturut-turut 128 dan 64.
>>3.	Output layer menggunakan aktivasi sigmoid.
>>
>>Model di-compile dengan loss binary_crossentropy dan optimizer adam dengan learning rate 0.0001. 
>>Arsitektur lengkapnya dapat dilihat pada gambar dibawah.
>>
>>![image](https://user-images.githubusercontent.com/90238361/208729395-ebbdbbbd-0887-4c23-99ab-7d4e59dec1ac.png)
>>
>>Hasil training model 1 dapat dilihat pada gambar di bawah.
>>
>>![image](https://user-images.githubusercontent.com/90238361/208729452-a1da90a5-bcdc-4215-809c-ef9082ee55d9.png)
>>
>>![image](https://user-images.githubusercontent.com/90238361/208729479-84a9fda8-84e1-49a2-9b0a-7483201b8183.png)
>>
>>Model mendapatkan accuracy tertinggi 0.82 dan loss 0.38 dengan val_accuracy 0.84 serta val_loss 0.32.
>>
>>Evaluasi dilakukan dengan menggunakan test set yang sudah disiapkan. Hasilnya dapat dilihat pada gambar dibawah.
>>![image](https://user-images.githubusercontent.com/90238361/208729594-8683c94a-3cc5-454a-8452-ac66d50a5642.png)
>>
>>Model 1 mendapat akurasi sebesar 87%, dan karena dataset yang digunakan merupakan dataset kesehatan maka recall label positif (1) mendapat prioritas tinggi dalam evaluasi model. Recall label 1 mendapat nilai 0.81.
>>
>>
>>### -	MODEL 2
>>
>>Model 2 terdiri dari total 4 lapisan.
>>1.	Input layer dengan node 64
>>2.	2 hidden layer dengan jumlah node berturut-turut 32 dan 32.
>>3.	Output layer menggunakan aktivasi sigmoid.
>>
>>Model di-compile dengan loss binary_crossentropy dan optimizer adam dengan learning rate 0.0001. 
>>Arsitektur lengkapnya dapat dilihat pada gambar dibawah.
>>
>>![image](https://user-images.githubusercontent.com/90238361/208730209-769b67f4-bdc3-4306-9610-ab472de519b8.png)
>>
>>Hasil training model 2 dapat dilihat pada gambar di bawah.
>>
>>![image](https://user-images.githubusercontent.com/90238361/208730300-9f22dfbd-8cfa-4f0d-aa25-9a7185e2fa43.png)
>>
>>![image](https://user-images.githubusercontent.com/90238361/208730321-31226f75-2111-401b-a617-d0e9ab57fcc7.png)
>>
>>Model 2 mendapatkan accuracy tertinggi 0.89 dan loss 0.26 dengan val_accuracy 0.88 serta val_loss 0.30.
>>
>>Evaluasi dilakukan dengan menggunakan test set yang sudah disiapkan. Hasilnya dapat dilihat pada gambar dibawah.
>>![image](https://user-images.githubusercontent.com/90238361/208730375-10c1a6ad-48b1-495a-8c71-62f6c634b677.png)
>>
>>Model 2 mendapat skor yang lebih baik dari model 1 dengan akurasi sebesar 87% dan recall label positif 0.84.
>>
>>
>>### - MODEL 3
>>
>>Model 3 terdiri dari total 5 lapisan
>>
>>1.	Input layer dengan node 128
>>2.	3 hidden layer dengan jumlah node berturut-turut 64, 32 dan 32.
>>3.	Output layer menggunakan aktivasi sigmoid.
>>
>>Model di-compile dengan loss binary_crossentropy dan optimizer adam dengan learning rate 0.00001. 
>>Arsitektur lengkapnya dapat dilihat pada gambar dibawah.
>>
>>![image](https://user-images.githubusercontent.com/90238361/208731548-d8e00143-8260-434f-9c02-4c16223c6001.png)
>>
>>Hasil training model 3 dapat dilihat pada gambar di bawah.
>>
>>![image](https://user-images.githubusercontent.com/90238361/208731634-47c44ad1-3146-4436-a005-942aba77a7de.png)
>>
>>![image](https://user-images.githubusercontent.com/90238361/208731662-01b02dc0-02fe-489e-82a2-a81778f10862.png)
>>
>>Model 3 mendapatkan accuracy tertinggi 0.96 dan loss 0.08 dengan val_accuracy 0.88 serta val_loss akhir 0.46.
>>
>>Evaluasi dilakukan dengan menggunakan test set yang sudah disiapkan. Hasilnya dapat dilihat pada gambar dibawah.
>>
>>![image](https://user-images.githubusercontent.com/90238361/208732069-441a5e13-c517-4b24-a97f-c13fb7ddf9f0.png)
>>
>>Model 3 mendapat akurasi yang lebih rendah dari model 2, yaitu 0.85. Namun mendapat recall label 1 yang lebih baik yaitu 0.88
>>
>>Hasil evaluasi: Dengan mempertimbangkan recall label positif sebagai prioritas utama dalam mengevaluasi model, diputuskan untuk menggunakan model 3.
>>
>>
>## 2. MODEL STROKE
>>### - MODEL 1
>>
>>Model 1 terdiri dari total 7 lapisan.
>>
>>1.	Input layer dengan node 128
>>2.	5 hidden layer dengan jumlah node berturut-turut 64, 32, 16, 8, dan 8.
>>3.	Output layer menggunakan aktivasi sigmoid.
>>4.	
>>Model di-compile dengan loss binary_crossentropy dan optimizer adam dengan learning rate 0.00005. 
>>Arsitektur lengkapnya dapat dilihat pada gambar dibawah.
>>
>>![image](https://user-images.githubusercontent.com/90238361/208732629-bc3227d5-f39e-4b17-9f53-2beb87ca039c.png)
>>
>>Hasil training model 1 dapat dilihat pada gambar di bawah.
>>
>>![image](https://user-images.githubusercontent.com/90238361/208732697-979ddb6c-91b8-4fcb-b54e-512f970e5594.png)
>>
>>![image](https://user-images.githubusercontent.com/90238361/208732723-aed0bcc8-b984-4ba8-8fcb-966d042aec91.png)
>>
>>
>>Model 1 mendapatkan accuracy tertinggi 0.84 dan loss 0.36 dengan val_accuracy 0.97 serta val_loss 0.29.
>>
>>Evaluasi dilakukan dengan menggunakan test set yang sudah disiapkan. Hasilnya dapat dilihat pada gambar dibawah.
>>
>>![image](https://user-images.githubusercontent.com/90238361/208732810-163d856a-cd7b-4a77-8533-911df71c13e3.png)
>>
>>![image](https://user-images.githubusercontent.com/90238361/208732835-e9f2df0f-08be-47a0-b353-530b08f4064e.png)
>>
>>Model 1 mendapat akurasi sebesar 77%, dan karena dataset yang digunakan merupakan dataset kesehatan maka recall label positif (1) mendapat prioritas tinggi dalam evaluasi model. Recall label 1 mendapat nilai 0.72.
>>
>>### - MODEL 2
>>
>>Model 2 terdiri dari total 8 lapisan.
>>
>>1.	Input layer dengan node 128
>>2.	5 hidden layer dengan jumlah node berturut-turut 64, 32, 16, 8, 4, dan 4.
>>3.	Output layer menggunakan aktivasi sigmoid.
>>
>>Model di-compile dengan loss binary_crossentropy dan optimizer adam dengan learning rate 0.00005. 
>>Arsitektur lengkapnya dapat dilihat pada gambar dibawah.
>>
>>![image](https://user-images.githubusercontent.com/90238361/208733666-48670458-998f-4208-93f5-f7b30314a154.png)
>>
>>Hasil training model 2 dapat dilihat pada gambar di bawah
>>
>>![image](https://user-images.githubusercontent.com/90238361/208733764-2fd77d92-6277-4ba9-8d4b-dc0155ca02f8.png)
>>
>>![image](https://user-images.githubusercontent.com/90238361/208733793-6f00a42a-5339-483c-b675-3f8a1f623a03.png)
>>
>>Model 2 mendapatkan accuracy tertinggi 0.69 dan loss 0.56 dengan val_accuracy 0.77 serta val_loss 0.58.
>>
>>Evaluasi dilakukan dengan menggunakan test set yang sudah disiapkan. Hasilnya dapat dilihat pada gambar dibawah.
>>
>>![image](https://user-images.githubusercontent.com/90238361/208733868-c20bb96e-f6a3-4c45-960c-8673170de569.png)
>>
>>![image](https://user-images.githubusercontent.com/90238361/208733888-e9b42596-4ef8-40f1-a6f6-a2d519578f33.png)
>>
>>Model 2 mendapat akurasi sebesar 81% yang lebih baik daripada model 1, namun recall label positif (1) mendapat skor yang lebih rendah dari model 1 yaitu 0.68.
>>
>>
>>Hasil evaluasi: Dengan mempertimbangkan recall label positif sebagai prioritas utama dalam mengevaluasi model, diputuskan untuk menggunakan model 1.




