# Analisis Perbaikan

## Permasalahan 1: Dockerfile Web1 Typo

### Gejala
Error saat build container web1: "pull access denied for php:8.2-apach, repository does not exist".

### Penyebab
Pada file `web1/Dockerfile`, tertulis `FROM php:8.2-apach`. Seharusnya `FROM php:8.2-apache` (kekurangan huruf 'e').

### Solusi
Mengganti baris tersebut menjadi `FROM php:8.2-apache`. Juga mengganti `EXPOSE 8080` menjadi `EXPOSE 80` karena port default Apache adalah 80.

---

## Permasalahan 2: Web3 Dockerfile dan Context Path

### Gejala
Error: "no such file or directory" saat build web3, dan error "unable to prepare context: path "./web33" not found".

### Penyebab
- Di `docker-compose.yml`, context web3 mengarah ke folder `./web33`, padahal folder yang benar adalah `./web3`.
- Di `web3/Dockerfile`, tertulis `FROM php:8.2-apche` (seharusnya `apache`).

### Solusi
1. Mengubah context web3 di `docker-compose.yml` menjadi `./web3`.
2. Mengubah isi `web3/Dockerfile` menjadi `FROM php:8.2-apache`.

---
