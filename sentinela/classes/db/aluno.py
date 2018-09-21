# -*- coding: utf-8 -*-
from classes.db.db import DB
import datetime

class Aluno:

    def __init__(self):
        self._db = DB()

    def getAll(self):
        self._db.execute("SELECT * FROM users WHERE papel_id=8")
        all = self._db.getCursor().fetchall()
        return all

    def jaTemPresenca(self, aluno_id):
        hoje = '{:%Y-%m-%d}'.format(datetime.datetime.now())
        query = "SELECT * FROM presencas WHERE aluno_id = '{0}' AND created_at LIKE '{1}%'".format(aluno_id, hoje)

        self._db.execute(query)

        presencas = self._db.getCursor().fetchall()
        if len(presencas) > 0:
            return True
        else:
            return False