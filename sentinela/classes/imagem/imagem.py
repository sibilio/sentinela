# -*- coding: utf-8 -*-
import face_recognition

class Imagem(object):
    def __init__(self, image):
        self.alunosPath = "/var/www/html/sentinela/storage/app/public/alunos/"
        self.imageName = image
        self.imagemGeral = face_recognition.load_image_file(self.imageName)
        self.imagemGeralEncoding = face_recognition.face_encodings(self.imagemGeral)

    #Veridica se a imagem passada é encontrada na imagem geral
    def findFace(self, imageToCompare):
        image = face_recognition.load_image_file(self.alunosPath+imageToCompare)
        encodingImage = face_recognition.face_encodings(image)[0]

        for face in self.imagemGeralEncoding:
            if face_recognition.compare_faces([face], encodingImage)[0]:
                return True