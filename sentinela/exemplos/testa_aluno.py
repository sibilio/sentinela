from classes.db.aluno import Aluno
from classes.db.presenca import Presenca

alunos = Aluno().getAll()
print(alunos)

presenca = Presenca()
#presenca.aluno(12)

