# firebase-dev-day-2019

Firebase Dev Day 2019 - Building dynamic website by Firebase Hosting x Cloud Run

## Docker Command

Build

`docker build -t asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest .`

Run

`docker run -p 8080:8080 asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest`

Run with local source

`docker run --mount type=bind,source="$(pwd)",target=/var/www/html -p 8080:8080 asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest`

## GCP Cloud Run Command

`gcloud builds submit --tag asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest`

`gcloud beta run deploy --image asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest --platform managed`

## Demo

### PHP App on container

1. Dev PHP App

2. Build Docker (PHP + Apache)

### Cloud Run

1. Build Docker image locally.

    ```sh
    docker build -t asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest .
    ```

2. Optional - Config gcloud. <https://cloud.google.com/sdk/docs/> Configure Docker to use Google Cloud Platform

    ```sh
    gcloud auth configure-docker
    ```

3. Push the image to GCR.

    ```sh
    docker push asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest
    ```

4. Deploy to Cloud Run.

    ```sh
    gcloud beta run deploy gear2019v2-firebase-dev-day-2019 \
        --quiet \
        --image asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest \
        --project gear2019v2 \
        --region asia-northeast1 \
        --platform managed \
        --allow-unauthenticated
    ```

### Firebase Hosting

1. Create a new site on console, name `fir-dev-day-2019`

2. Set up deploy targets

    ```sh
    firebase target:apply hosting gear2019v2 gear2019v2
    firebase target:apply hosting fir-dev-day-2019 fir-dev-day-2019
    ```

3. Add rewrites config

    ```json
    {
        ...
        "hosting": [
            {},
            ...
            {
                "target": "fir-dev-day-2019",
                "public": "fir-dev-day-2019/public",
                "ignore": [ "firebase.json", "**/.*", "**/node_modules/**" ],
                "rewrites": [
                    {
                        "source": "**",
                        "run": {
                            "serviceId": "gear2019v2-firebase-dev-day-2019",
                            "region": "asia-northeast1"
                        }
                    }
                ]
            },
            ...
        ]
    }
    ```

    To listing Firebase project

    ```sh
    firebase projects:list
    ```

4. Deploy

    ```sh
    firebase deploy --only hosting:fir-dev-day-2019
    ```

## References

<https://cloud.google.com/run/docs/quickstarts/build-and-deploy>

<https://cloud.google.com/container-registry/docs/pushing-and-pulling>

<https://cloud.google.com/sdk/gcloud/reference/beta/run/deploy>
