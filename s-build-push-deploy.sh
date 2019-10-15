echo "Build image ..."
docker build -t asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest .

echo "Push image to GCR ..."
docker push asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest

echo "Deploy to Cloud Run with latest image from GCR ..."
gcloud beta run deploy gear2019v2-firebase-dev-day-2019 \
    --quiet \
    --image asia.gcr.io/gear2019v2/firebase-dev-day-2019:latest \
    --project gear2019v2 \
    --region asia-northeast1 \
    --platform managed \
    --allow-unauthenticated