# TailwindBundle-and-AssetMapper

---

## Installation

When running the project for the first time, do the following steps:

1. Install OrbStack (Docker Provider) and Docker

    ```shell
    brew install orbstack docker
    ```

2. Install DDEV

    ```shell
    brew install ddev/ddev/ddev
    ```

3. Run `mkcert -install`
   It allows your browser to trust the HTTPS/TLS certificates served by DDEV.

    ```shell
    mkcert -install
    ```

4. Install Composer packages

    ```shell
    ddev composer install
    ```

See more: [Get Started | DDEV](https://ddev.com/get-started/)

## Starting project

```shell
ddev launch
```

## CSS assets

### Watch and rebuild Tailwind CSS assets

```shell
ddev console tailwind:build --watch
```
