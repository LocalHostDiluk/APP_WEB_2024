from django.shortcuts import render,redirect

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

def Registroo(request):
    return render(request, 'app/registro.html', { 'title': 'Registro',
    'content': 'Esta es la pagina de registro' })

def Loginn(request):
    return render(request, 'app/login.html', { 'title': 'Login',
    'content': 'Esta es la pagina de inicio de sesión' })

def error_404_view(request,exception):
    return redirect('index',{
        'title':'Error 404',
        'content':'Pagina no encontrada'
    })