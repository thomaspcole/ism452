#Builds a docker image from the dockerfile and runs the image
#This file works for MacOS and Linux
#!/bin/bash
function dockerCommands() {
  echo "Building Image..."
  docker-compose build
  echo "Done!"

  echo "Running container. Press CTRL+C to exit"
  docker-compose up

  docker-compose down
  echo "Goodbye!"
}

if [ "$(uname)" == "Darwin" ]; then
  if [[ $(docker version --format "{{.Server.KernelVersion}}") == *-linuxkit ]]; then
    echo "Docker is running."
    dockerCommands
    exit 0
  else
    echo "Docker is not running. Please start docker for mac."
    exit 1
  fi
elif [ "$(expr substr $(uname -s) 1 5)" == "Linux" ]; then
  USER=$USERNAME
  GROUP=docker

  #Test if user is in the docker group
  if id -nG "$USER" | grep -qw "$GROUP"; then
      echo $USER belongs to $GROUP
  else
      echo $USER does not belong to $GROUP
      exit 1
  fi

  dockerCommands
  exit 0
fi
