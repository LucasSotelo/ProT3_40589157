<?php
namespace App\Controllers;
Use App\Models\usuarios_model;
use CodeIgniter\Controller;


class Usuario_controller extends Controller{
    public function __construct(){
        helper(['form', 'url']);
    }

    public function create() {
        $data['titulo']='Registro';
        echo view('front/head'),$data;
        echo view('back/usuario/registro');
        echo view('front/footer');
    }

    public function formValidation()
    {
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[8]|max_length[20]',
        ]);

        $formModel = new usuarios_model();
        if (!$input) {
            $data['titulo'] = 'Registro';
            echo view('front/head', $data);
            echo view('back/usuario/registro', ['validation' => $this->validator]);
            echo view('front/footer');
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
            ]);

            session()->setFlashdata('success', 'Usuario Registrado con Éxito');
            return $this->response->redirect('login');
        }
    }

    public function listar()
    {
        $session = session();
        $model = new usuarios_model();
        $usuario = $model->getAllUsers();
        $data = [
            'titulo' => 'Lista de Usuarios',
            'usuario' => $usuario,
        ];


        echo view('front/head', $data);
        echo view('back/usuario/lista_usuarios', compact('usuario'));
        echo view('front/footer');
    }

    public function edit($id)
{
    
    $model = new usuarios_model();
    $usuario = $model->getUserById($id);

    
    if (!$usuario) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Usuario no encontrado');
    }

    
    $rules = [
        'nombre' => 'required|min_length[3]', 
        'apellido' => 'required|min_length[3]|max_length[25]', 
        'email' => 'required|min_length[4]|max_length[100]', 
        'usuario' => 'required|min_length[3]', 
        'perfil_id' => 'required|numeric', 
        'baja' => 'required|in_list[NO,SI]', 
    ];

    
    if (!$this->validate($rules)) {
        $data['validation'] = $this->validator;
    } else {
        
        $updateData = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'email' => $this->request->getPost('email'),
            'usuario' => $this->request->getPost('usuario'),
            'perfil_id' => $this->request->getPost('perfil_id'),
            'baja' => $this->request->getPost('baja'),
        ];

       
        try {
            $model->update($id, $updateData);

           
            session()->setFlashdata('msg', 'Usuario actualizado correctamente');
            return redirect()->to('/principal');
        } catch (\Exception $e) {
            log_message('error', 'Error al actualizar usuario: ' . $e->getMessage());
            $data['validation'] = $this->validator; 
        }
    }

    
    $data = [
        'titulo' => 'Editar Usuario', 
        'usuario' => $usuario, 
    ];

   
    helper(['form']);

    
    echo view('front/head', $data);
    echo view('back/usuarios/editar_usuario', $data);
    echo view('front/footer');
}

    public function delete($id)
    {
        $session = session();
        $model = new usuarios_model();

        if ($session->get('perfil_id') != 1) {
            return redirect()->to('usuarios');
        }

        $model->delete($id);
        $session->setFlashdata('msg', 'Usuario eliminado correctamente');
        return redirect()->to('usuarios');
    }
}