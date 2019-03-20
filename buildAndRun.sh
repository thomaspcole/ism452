#Builds a docker image from the dockerfile and runs the image

#!/bin/bash
USER=$USERNAME
GROUP=docker

#Test if user is in the docker group
if id -nG "$USER" | grep -qw "$GROUP"; then
    echo $USER belongs to $GROUP
else
    echo $USER does not belong to $GROUP
    exit 1
fi

echo "Building Image..."
docker-compose build
echo "Done!"

echo "Running container. Press CTRL+C to exit"
docker-compose up

docker-compose down
echo "Goodbye!"
exit 0
