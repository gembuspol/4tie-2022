import pygame
import os
import time
import random
pygame.font.init()
WIDTH, HEIGHT = 750, 750
OKNO = pygame.display.set_mode((WIDTH, HEIGHT))
TLO = pygame.transform.scale(pygame.image.load(os.path.join("assets", "background-black.png")), (WIDTH, HEIGHT))

class Laser:
    def __init__(self,x,y,img):
        self.x=x
        self.y=y
        self.img=img 
        self.mask=pygame.mask.from_surface(self.img)
    def rysuj(self,okno):
        okno.blit(self.img,(self.x,self.y))
    def ruch(self,vel):
        self.y +=vel
    def poza_ekran(self,height):
        return not(self.y<=height and self.y>=0)
    def kolizja(self,obiekt):
        return trafienie(self,obiekt)    
def trafienie(obiekt1,obiekt2):
    offest_x=obiekt2.x-obiekt1.x
    offest_y=obiekt2.y-obiekt1.y
    return obiekt1.mask.overlap(obiekt2.mask, (offest_x,offest_y)) != None
def glowne_menu():
    title_font= pygame.font.SysFont("comicsans",30)
    run=True

    while run:
        OKNO.blit(TLO, (0,0))
        tytul=title_font.render("Naciśnij przycisk myszy aby uruchomić grę ...",1,(255,255,255))
        OKNO.blit(tytul,(WIDTH/2-tytul.get_width()/2,350))
        pygame.display.update()
        for zdarzenie in pygame.event.get():
            if zdarzenie.type == pygame.QUIT:
                run=False
            if zdarzenie.type == pygame.MOUSEBUTTONDOWN:
                print("test")
    pygame.quit()

glowne_menu()
