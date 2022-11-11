FROM python:3.9-slim

# Настроить и активировать виртуальную среду
ENV VIRTUAL_ENV "/venv"
RUN python -m venv $VIRTUAL_ENV
ENV PATH "$VIRTUAL_ENV/bin:$PATH"

# Команды Python будут выполнены в виртуальной среде
#RUN python -m pip install

# Set working directory
WORKDIR /var/www/html/python

COPY . .

#CMD [ "python3", "-m" , "run", "--host=0.0.0.0"]
