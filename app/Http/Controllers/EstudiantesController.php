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
            $validacion = Estudiantes::where("nombre", $request->input('nombre'))->first();
            if (!$validacion) {
                $record = Estudiantes::create([
                        'nombre'          => $request->input('nombre'),
                        'curso'          => $request->input('curso'),
                        'fecha_pago'          => $request->input('fecha_pago'),
                        'mora'       => $request->input('mora'),
                        'fecha_ingreso'        => $request->input('fecha_ingreso'),
                        'estado'        => $request->input('estado'),
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
                $record->nombre  = $request->input('nombre', $record->nombre);
                $record->curso  = $request->input('curso', $record->curso);
                $record->estado  = $request->input('estado', $record->estado);
                $record->fecha_pago  = $request->input('fecha_pago', $record->fecha_pago);
                $record->fecha_ingreso  = $request->input('fecha_ingreso', $record->fecha_ingreso);
                $record->mora  = $request->input('mora', $record->mora);
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