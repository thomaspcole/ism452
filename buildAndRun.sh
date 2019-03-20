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
docker build -t ism452 .
echo "Done!"

echo "Running container. Press CTRL+C to exit"
docker run -p 80:80 -v /home/$USER/ism452/src/:/var/www/html ism452

echo "Goodbye!"
exit 0
