#!/usr/bin/env python
# -*- coding: utf-8 -*-
from classes.imagem.imagem import Imagem
from classes.db.aluno import Aluno
from classes.db.presenca import Presenca
import os

while True:
    pasta = "/var/www/html/sentinela/storage/app/public/chamada"
    caminhos = [os.path.join(pasta, nome) for nome in os.listdir(pasta)]
    arquivos = [arq for arq in caminhos if os.path.isfile(arq)]

    if(len(arquivos)>0):
        for arquivo in arquivos:
            imagem = Imagem(arquivo)
            alunos = Aluno()
            presenca = Presenca()

            for aluno in alunos.getAll():
                if imagem.findFace(aluno[7]):
                    if not alunos.jaTemPresenca(aluno[0]):
                        presenca.aluno(aluno[0])

            os.remove(arquivo)