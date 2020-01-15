import mysql.connector

mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    passwd="",
    database="agrocraft"
)

mycursor = mydb.cursor()

farmer_id = "select farmer_id from farmerregistration"
rows = mycursor.execute(farmer_id)
myresult = mycursor.fetchall()
print(myresult)

# Security_check = 'select farmer_id from farmerregistration where farmer_password = "{}" and farmer_phone = {}'.format(
#     password, phone)

# rows = mycursor.execute(Security_check)
