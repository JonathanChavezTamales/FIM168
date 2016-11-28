#!/usr/bin/python

import serial 
import MySQLdb as mbd

#Esta parte conecta este programa de pyhton a la base de datos.
dbConn = mbd.connect("127.0.0.1","root","","CanSATService") or die ("No se pudo conectar a la base de datos")
#abre el cursor para la base de datos.
cursor = dbConn.cursor()

#Este es el puerto serial que tengo en uso.
device = '/dev/cu.usbserial-A50285BI'
while True:
    try:
      print "Conectando...",device 
      arduino = serial.Serial(device, 9600) 
    except: 
      print "Failed to connect on",device    
 
    try: 
      data = arduino.readline().strip("\r\n")  #Leer datos del Arduino.
      pieces = data.split(",")  #Divide el string por su indicador
      print pieces #Imprimir los datos del serial por motivos de depuracion.
      #Aqui se intenta insertar los datos a la base de datos.
      try:
        cursor.execute("INSERT INTO datos (Ident, Temp_1, Humedad, Presion, Temp_2, AltPress, mx, my, mz, ax, ay, az, gx, gy, gz, Latitud, Longitud, Altitud) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)", (pieces[0],pieces[1],pieces[2],pieces[3],pieces[4],pieces[5],pieces[6],pieces[7],pieces[8],pieces[9],pieces[10],pieces[11],pieces[12],pieces[13],pieces[14],pieces[15],pieces[16],pieces[17]))
        dbConn.commit() #Insertar datos.
      except mbd.IntegrityError:
        print "Fallo la inserccion de datos"
    except: #Esta es una validacion de si no llegan los datos del string completo no insertara nada en la
        #base de datos para evitar errores en nuestras graficas (NOTA: DATOS NULOS ROMPEN LAS GRAFICAS!!!)
      print "Fallo en obtener datos Arduino o  cadena incompleta!"
