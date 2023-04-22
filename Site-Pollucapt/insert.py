import mysql.connector
import random
import time





while True:
    conn = mysql.connector.connect(
    user='pollucapt', password='MaisTG!3', host='mysql-pollucapt.alwaysdata.net', database='pollucapt_bd')
    cursor = conn.cursor()

    sql = "INSERT INTO `coordonnees`(`coord_x`, `coord_y`, `niveau`) VALUES (%s, %s, %s)"
    time.sleep(0.1)
    print("/n")
    a = random.uniform(2.146, 2.552)
    print(a)
    
    b=  random.uniform(48.706, 48.985)
    print(b)
    c= random.uniform(50, 110)
    data= (a,b,c)

    try:
        # Executing the SQL command
        cursor.execute(sql,data)

        # Commit your changes in the database
        conn.commit()

    except:
    # Rolling back in case of error
        conn.rollback()

    # Closing the connection
    conn.close()