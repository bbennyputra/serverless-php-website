# About

Repository ini berisi PHP dan Terraform script untuk hosting normal PHP website dengan AWS Lambda.

Untuk panduan lengkap silahkan merujuk pada artikel TeknoCerdas.com berikut.

- [Serverless PHP: Hosting Normal PHP Website dengan Lambda](https://teknocerdas.com/programming/serverless-php-hosting-normal-php-website-dengan-lambda/)

## How to Run

Pastikan anda memiliki AWS account dengan privilege Administrator agar tidak terjadi masalah ketika menjalankan Terraform.

```
$ export AWS_PROFILE=YOUR_PROFILE AWS_DEFAULT_REGION=YOUR_REGION
```

Build website script terlebih dahulu.

```
$ bash build.sh
```

Masuk pada directory `terraform/` dan mulai jalankan init dan apply untuk membuat resources yang diperlukan.

```
$ terraform init
$ terraform apply
```

```
...
Outputs:

api = {
  "end_point" = "GET https://22ye14vzsk.execute-api.us-east-1.amazonaws.com/"
}
```

Terdapat dua URL untuk website yang dibuat yaitu `/` dan `/info`.

## License

Repository ini dilisensikan dibawah naungan [MIT License](https://opensource.org/licenses/MIT).
