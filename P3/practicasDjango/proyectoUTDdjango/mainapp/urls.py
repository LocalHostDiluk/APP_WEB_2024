from django.contrib import admin
from django.urls import path
from .views import *

urlpatterns = [
    path('', index, name='index'),
    path('inicio/', index, name='index'),
    path('acerca/', about, name='about'),
    path('mision/', mision, name='mision'),
    path('vision/', vision, name='vision'),
]