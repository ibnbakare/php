#!/bin/bash

# Define variables
USER="ridhwan"
HOST="81.17.101.185"
APP_DIR="/var/www/my_python_app"

# SSH into the server, update the repository, install dependencies, and restart the app
ssh $USER@$HOST << EOF
  cd $APP_DIR
  git pull origin main
  source venv/bin/activate
  pip install -r requirements.txt
  # Restart your application, adjust the command depending on how your app is managed
  # Example for a Flask app using gunicorn:
  # pkill gunicorn
  # gunicorn --workers 3 app:app --daemon --bind 0.0.0.0:8000
EOF
