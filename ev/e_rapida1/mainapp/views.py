from django.shortcuts import render

# Create your views here.
def index(request):
    return render(request, 'app/index.html', { 'title': 'Hola mundo',
    'content': 'Bienvenido a la página de inicio',})

def about(request):
    return render(request, 'app/about.html', { 'title': 'Acerca de',
    'content': 'Esta es la pagina de about' })

def mision(request):
    return render(request, 'app/mision.html', { 'title': 'Mision',
    'content': 'Esta es la pagina de mision' })

def vision(request):
    return render(request, 'app/vision.html', { 'title': 'Vision',
    'content': 'Esta es la pagina de vision' })