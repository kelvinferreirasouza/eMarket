<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Usuario;
use App\Cargo;
use Illuminate\Support\Facades\Hash;
use Auth;
 
class UsuarioController extends Controller
{
    
    private $usuario;

    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }
    
    
    public function listarUsuarios()
    {
        $usuarios = Usuario::paginate(10);
        $cargos = Cargo::all();
        return view('usuarios.listar', compact('usuarios', 'cargos'));
    }
 
    public function editarUsuario($id)
    {
        $this->authorize('update', Usuario::class);
 
        $usuario = Usuario::find($id);
        $cargos = Cargo::all();
        return view('usuarios.editar', compact('usuario', 'cargos'));
    }
 
    public function atualizarUsuario(Request $request, $id)
    {
        $this->authorize('update', Usuario::class);
         
        $dados = $request->all();
        $usuario = Usuario::find($id);
 
        if(!$dados['senha']){
            $senha_antiga = $usuario->senha;
            $dados['senha'] = $senha_antiga;
            $usuario->update($dados);
        }else{
            $senha_nova = Hash::make($dados['senha']);
            $dados['senha'] = $senha_nova;
            $usuario->update($dados);
        }
 
        return redirect()->route('listarUsuarios');
    }

    public function excluirUsuario($id)
    {
        $usuario = Usuario::find($id);

        $usuario->delete();

        return redirect()->route('listarUsuarios');
    }

    public function visualizarUsuario($id)
    
    {
        $this->authorize('update', Usuario::class);

        $usuario = Usuario::find($id);
        $cargos = Cargo::all();

        return view('usuarios.visualizar', compact('usuario', 'cargos'));
    }
 
    public function registrar()
    {
        return view('usuarios.registrar');
    }
 
    public function salvar(Request $request)
    {
        $dados = $request->all();
        $dados['senha'] = bcrypt($dados['senha']);
        Usuario::create($dados);
 
        return redirect()->route('manager');
    }

    public function salvarUsuario(Request $request)
    {
        $dados = $request->all();
        $dados['senha'] = bcrypt($dados['senha']);
        

        if (Auth::user()->cargoId != 1){
            
            $tipoUserPermitido = 3;

            $dados['tipoUsuario'] = $tipoUserPermitido;
        }

        Usuario::create($dados);
 
        return redirect()->route('listarUsuarios');
    }

    public function cadastrarUsuario()
    {
        return view('usuarios.cadastrar');
    }
    
    public function pesquisarUsuario(Request $request) {
        
        $usuarios = $this->usuario->pesquisa($request);
        
        $cargos = Cargo::all();
        
        return view('usuarios.listar', compact('usuarios', 'cargos'));
    }
}