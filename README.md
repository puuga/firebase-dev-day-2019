# firebase-dev-day-2019

Firebase Dev Day 2019 - Building dynamic website by Firebase Hosting x Cloud Run

## Docker Command

`docker build -t asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest .`

`docker run --mount type=bind,source="$(pwd)",target=/var/www/html -p 8080:8080 asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest`

## GCP Command

`gcloud builds submit --tag asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest`

`gcloud beta run deploy --image asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest --platform managed`

## How to

### Cloud Run

1. Build Docker image locally.
    `docker build -t asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest .`

2. Optional - Config gcloud.
    <https://cloud.google.com/sdk/docs/>

3. Push the image to GCR.
    `docker push asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest`

4. Deploy to Cloud Run.
    `gcloud beta run deploy gear2019v2-firebase-dev-day-2019 --quiet --image asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest --project gear2019v2 --region asia-northeast1 --platform managed --allow-unauthenticated`

### Firebase Hosting

1. Add config

2. Deploy

## References

<https://cloud.google.com/run/docs/quickstarts/build-and-deploy>

<https://cloud.google.com/container-registry/docs/pushing-and-pulling>

<https://cloud.google.com/sdk/gcloud/reference/beta/run/deploy>
