import requests
import mysql.connector
from firebase import firebase

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
database="agrocraft"
)

mycursor = mydb.cursor()

# mycursor.execute("show databases")
#
# for x in mycursor:
#     print(x)

firebase = firebase.FirebaseApplication("https://farmer-order.firebaseio.com/",None)


results = firebase.get('/','')

    # for key,value in results.items():
    #     print("\n")
    #     attributes = value
        # print(key)
        # phone = attributes.get('phone','Not_Found')
        # password = attributes.get('password','Not_Found')
        # prod_title = attributes.get('prod_title','Not_Found')
        # prod_cat = attributes.get('prod_cat','Not_Found')
        # stock = attributes.get('stock', 'Not_Found')
        # price = attributes.get('price', 'Not_Found')
        # prod_key = attributes.get('prod_key', 'Not_Found')
        # delivery = attributes.get('delivery', 'Not_Found')
        # print("\n")

phone = 123
password = "abjb12"
prod_title = "abhishek"
prod_cat = "1"
stock = 123
price = 123
prod_key = "test"
delivery = "1"


# sql = "insert into products (product_title,product_cat,product_stock,product_price,product_keywords,product_delivery) values (%s,%s,%d,%d,%s,%s)"
# val = ('tetsing','dgdd',1,2,'fs','fdf')

query = "insert into products () values (6,'trest')"

mycursor.execute(query)
mydb.commit()

print(mycursor.rowcount, "record inserted.")


        # firebase.delete('/',key)
