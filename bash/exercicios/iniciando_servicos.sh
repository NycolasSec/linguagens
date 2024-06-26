#!/bin/bash

echo "Deseja iniciar qual serviço ?"

read -r serv

service "$serv" restart

echo "Serviços ativos:"

ps aux | grep "$serv"

echo "Portas abertas:"

netstat -nlpt 2> /dev/null

