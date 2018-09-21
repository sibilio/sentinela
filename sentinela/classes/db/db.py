# -*- coding: utf-8 -*-
import pymysql

class DB(object):

    def __init__(self):
        self._db = pymysql.connect("localhost", "root", 'm74e71', 'sentinela')
        self._cursor = self._db.cursor()

    def getCursor(self):
        return self._cursor

    def getDB(self):
        return self._db

    def execute(self, query):
        self._cursor.execute(query)

    def commit(self):
        self._db.commit()