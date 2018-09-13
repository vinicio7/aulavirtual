<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Estudiantes;
class EstudiantesController extends Controller
{
    protected $result      = false;
    protected $message     = 'Ocurrió un problema al procesar su solicitud';
    protected $records     = array();
    protected $status_code = 400;
    public function index() {
        try {
            $records           = Estudiantes::all();
            $this->status_code = 200;
            $this->result      = true;
            $this->message     = 'Registros consultados correctamente';
            $this->records     = $records;
        } catch (\Exception $e) {
            $this->status_code = 400;
            $this->result      = false;
            $this->message     = env('APP_DEBUG')?$e->getMessage():$this->message;
        }finally{
            $response = [
                'result'  => $this->result,
                'message' => $this->message,
                'records' => $this->records,
            ];
            return response()->json($response, $this->status_code);
        }
    }
    
    public function store(Request $request) {
        try {
            $validacion = Estudiantes::where("correo", $request->input('correo'))->first();
            if (!$validacion) {
                $record = Estudiantes::create([
                        'nombre'          => $request->input('nombre'),
                        'correo'          => $request->input('correo'),
                        'estado'          => $request->input('estado'),
                        'direccion'       => $request->input('direccion'),
                        'telefono'        => $request->input('telefono'),
                    ]);
                if ($record) {
                    $this->status_code = 200;
                    $this->result      = true;
                    $this->message     = 'Estudiante creado correctamente.';
                    $this->records     = $record;
                } else {
                    throw new \Exception('El estudiante no pudo ser creado.');
                }
            } else {
                throw new \Exception('Ya existe el código del estudiante.');
            }
            
        } catch (\Exception $e) {
            $this->status_code = 400;
            $this->result      = false;
            $this->message     = env('APP_DEBUG')?$e->getMessage():$this->message;
        }finally{
            $response = [
                'result'  => $this->result,
                'message' => $this->message,
                'records' => $this->records,
            ];
            return response()->json($response, $this->status_code);
        }
    }
    public function show($id){
       try {
            $record = Estudiantes::find($id);
            if ($record) {
                $this->status_code  = 200;
                $this->result       = true;
                $this->message      = 'El estudiante no existe.';
                $this->records      = $record;
            } else {
                throw new \Exception('El estudiante no existe.');
            }
        } 
        catch (\Exception $e) {
            $this->status_code  = 400;
            $this->result       = false;
            $this->message      = env('APP_DEBUG') ? $e->getMessage() : $this->message;
        } finally {
            $response = [
                'result'  => $this->result,
                'message' => $this->message,
                'records' => $this->records,
            ];
            return response()->json($response, $this->status_code);
        }
    }
    public function update(Request $request, $id) {
        try {
            $record = Estudiantes::find($id);
            if ($record) {
                $record->descripcion  = $request->input('descripcion', $record->descripcion);
                $record->correo  = $request->input('correo', $record->correo);
                $record->estado  = $request->input('estado', $record->estado);
                $record->telefono  = $request->input('telefono', $record->telefono);
                $record->direccion  = $request->input('direccion', $record->direccion);
                $record->save();
                if ($record->save()) {
                    $this->status_code  = 200;
                    $this->result       = true;
                    $this->message      = 'Estudiante actualizado correctamente.';
                    $this->records      = $record;
                } else {
                    throw new \Exception('El estudiante no pudo ser actualizado.');
                }
                } else {
                        throw new \Exception('El estudiante a modificar no existe.');
                }
        } catch (\Exception $e) {
            $this->status_code = 400;
            $this->result      = false;
            $this->message     = env('APP_DEBUG')?$e->getMessage():$this->message;
        }finally{
            $response = [
                'result'  => $this->result,
                'message' => $this->message,
                'records' => $this->records,
            ];
            return response()->json($response, $this->status_code);
        }
    }
    public function destroy($id){
        try {
            $record = Estudiantes::find($id);
            if ($record) {
                $record->delete();
                $this->status_code  = 200;
                $this->result       = true;
                $this->message      = 'Estudiante eliminado correctamente';
            } else {
                throw new \Exception('El estudiante no pudo ser encontrado');
            }
        } 
        catch (\Exception $e) {
            $this->status_code  = 400;
            $this->result       = false;
            $this->message      = env('APP_DEBUG') ? $e->getMessage() : $this->message;
        } finally {
            $response = [
                'result'  => $this->result,
                'message' => $this->message,
                'records' => $this->records,
            ];
            return response()->json($response, $this->status_code);
            }
    }
}