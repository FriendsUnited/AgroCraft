import requests
import mysql.connector
from firebase import firebase

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd=""
)

mycursor = mydb.cursor()

# mycursor.execute("show databases")
#
# for x in mycursor:
#     print(x)

firebase = firebase.FirebaseApplication("https://farmer-order.firebaseio.com/",None)

data = {
    'phone': 78946512,
    'password':'fndjk',
    'prod_title':'ramlal',
    'stock':'100',
    'price':1532,
    'prod_key':'vjndk',
    'delivery':'k'

}

firebase.post('/',data)
try:
    results = firebase.get('/','')

    for key ,value in results.items():
        print("\n")
        attributes = value
        print(key)
        print(attributes.get('phone','Not_Found'))
        print(attributes.get('password','Not_Found'))
        print(attributes.get('prod_title','Not_Found'))
        print(attributes.get('stock', 'Not_Found'))
        print(attributes.get('price', 'Not_Found'))
        print(attributes.get('prod_key', 'Not_Found'))
        print(attributes.get('delivery', 'Not_Found'))
        print("\n")

        # firebase.delete('/',key)
except:
    pass