# -*- coding: utf-8 -*-
from classes.db.db import DB

import datetime

class Presenca:

    def __init__(self):
        self._db = DB()

    def aluno(self, id_aluno):
        hoje = '{:%Y-%m-%d %H:%M:%S}'.format(datetime.datetime.now())

        query = """INSERT INTO presencas(aluno_id, materia_id, created_at, updated_at)
                        VALUES ('%d', 0, '%s', '%s')"""%(id_aluno, hoje, hoje)
        self._db.execute(query)
        self._db.commit()