#!/bin/bash
# This a script to deploy changes to our heroku app

echo "Ready to deploy app......................................"

git add .
git commit -m "Another set of changes"
git push heroku master

echo "Application has been successfully deployed....."
