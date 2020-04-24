import MySQLdb
import mysql.connector

mydb = mysql.connector.connect(
  host="10.200.2.17",
  database = "vendr",
  user="vendr",
  passwd="vendr"
)

mycursor = mydb.cursor()

vendingCode = raw_input("Please enter validation key below:")
#vendingCode = input("Please enter validation key below:\n")
mycursor.execute("SELECT OrderID FROM validation WHERE VendingCode = %s", (vendingCode,))

orderIDArr = mycursor.fetchall()
#print(type(orderIDArr))
#print(orderIDArr[0])

orderIDTemp = orderIDArr[0]
orderID = orderIDTemp[0]
#print(type(orderID))
#int(orderID)

#print (orderID)
mycursor.execute("SELECT ItemID FROM orders WHERE OrderID = %s", (orderID,))

itemID = mycursor.fetchall()
#for x in itemID:
 # print(x)

numItems = len(itemID)

if numItems == 0:
    print("uh-oh!~ no items were found :(")
    
elif numItems == 1:
    itemOneTemp = itemID[0]
    itemOne = itemOneTemp[0]
    #print(itemOne)

    mycursor.execute("SELECT ItemName FROM item WHERE ItemID = %s", (itemOne,))
    itemNameArray = mycursor.fetchall()

    itemNameOne = itemNameArray[0]

    print("Dispensing your order of:", itemNameOne)
    print("\n Thank you for your purchase have a nice day!")


elif numItems == 2:
    itemOneTemp = itemID[0]
    itemOne = itemOneTemp[0]
    #print(itemOne)

    itemTwoTemp = itemID[1]
    itemTwo = itemID[0]
    #print(itemTwo)

    mycursor.execute("SELECT ItemName FROM item WHERE ItemID = %s OR ItemID = %s", (itemOne,itemTwo,))
    itemNameArray = mycursor.fetchall()

    itemNameOne = itemNameArray[0]
    itemNameTwo = itemNameArray[1]

    print("\n Dispensing your order of:", itemNameOne, itemNameTwo,)
    print("\n Thank you for your purchase have a nice day!")


elif numItems == 3:
    itemOneTemp = itemID[0]
    itemOne = itemOneTemp[0]
    #print(itemOne)

    itemTwoTemp = itemID[1]
    itemTwo = itemTwoTemp[0]
    #print(itemTwo)

    itemThreeTemp = itemID[2]
    itemThree = itemThreeTemp[0]
    #print(itemThree)

    mycursor.execute("SELECT ItemName FROM item WHERE ItemID = %s OR ItemID = %s OR ItemID = %s", (itemOne,itemTwo,itemThree,))
    itemNameArray = mycursor.fetchall()

    itemNameOne = itemNameArray[0]
    itemNameTwo = itemNameArray[1]
    itemNameThree = itemNameArray[2]

    print("\n Dispensing your order of: ", itemNameOne, itemNameTwo, itemNameThree)
    print("\n Thank you for your purchase have a nice day!")

elif numItems == 4:
    itemOneTemp = itemID[0]
    itemOne = itemOneTemp[0]
    #print(itemOne)

    itemTwoTemp = itemID[1]
    itemTwo = itemTwoTemp[0]
    #print(itemTwo)

    itemThreeTemp = itemID[2]
    itemThree = itemThreeTemp[0]
    #print(itemThree)

    itemFourTemp = itemID[3]
    itemFour = itemFourTemp[0]
    #print(itemFour)

    mycursor.execute("SELECT ItemName FROM item WHERE ItemID = %s OR ItemID = %s OR ItemID = %s OR ItemID = %s ", (itemOne,itemTwo,itemThree,itemFour,))
    itemNameArray = mycursor.fetchall()

    itemNameOne = itemNameArray[0]
    itemNameTwo = itemNameArray[1]
    itemNameThree = itemNameArray[2]
    itemNameFour = itemNameArray[3]

    print("\n Dispensing your order of: ", itemNameOne, itemNameTwo, itemNameThree, itemNameFour)
    print("\n Thank you for your purchase have a nice day!")



#for x in itemNameArray:
 # print(x)