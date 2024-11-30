from django.contrib import admin
from django.urls import path
from .views import *

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', index, name='index'),
    path('about/', about, name='about'),
    path('mision/', mision, name='mision'),
    path('vision/', vision, name='vision'),
    path('registro/', Registroo, name='registro'),
    path('login/', Loginn, name='login'),
]