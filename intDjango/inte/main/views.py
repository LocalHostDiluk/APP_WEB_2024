from django.shortcuts import render

# Create your views here.
def index(request):
    return render(request, 'pages/login.html', { 'title': 'Login'})

def reg(request):
    return render(request, 'pages/registro.html', { 'title': 'Registro'})
