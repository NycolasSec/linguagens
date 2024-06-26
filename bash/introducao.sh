#!/bin/bash

echo "Nycolas ramos"

echo "O sistema está ligado por $(uptime -p | cut -d" " -f2,3)" 

echo "Digite um ip:"
read -r ipHost

echo "Varrendo o host $ipHost"