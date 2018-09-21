import pymysql

db = pymysql.connect("localhost", "root", 'm74e71', 'sentinela')

cursor = db.cursor()

cursor.execute("select * from users")

data = cursor.fetchall()

for index, row in enumerate(data):
    print('Registro {0}:'.format(index))
    for index, column in enumerate(row):
        print("\tColuna {0}: {1}".format(index, column))