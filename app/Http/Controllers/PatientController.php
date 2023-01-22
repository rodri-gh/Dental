<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientFormRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{

 public function index(Request $request)
 {
  $sort   = $request->input('sort', 'id');
  $order  = $request->input('order', 'asc');
  $search = $request->input('search');

  $patients = Patient::where('user_id', auth()->user()->id)
   ->when($search, function ($query, $search) {
    return $query->where('name', 'like', "%{$search}%")
     ->orWhere('ci', 'like', "%{$search}%")
     ->orWhere('phone', 'like', "%{$search}%");
   })
   ->orderBy($sort, $order)
   ->paginate(5);

  return view('patient.index', compact('patients', 'sort', 'order'));
 }

 public function create()
 {
  return view('patient.create');
 }

 public function store(PatientFormRequest $request)
 {
  $data = $request->validated();

  /*$patient          = Patient::create($data);
  $patient->user_id = auth()->user()->id;*/
  $patient = Patient::create([
   'user_id'                     => auth()->user()->id, // 'user_id'   => '1
   'nombre' => $data['nombre'],
   'lugar_nacimiento'            => $data['lugar_nacimiento'],
   'fecha_nacimiento'            => $data['fecha_nacimiento'],
   'ocupacion'                   => $data['ocupacion'],
   'sexo'                        => $data['sexo'],
   'cedula'                      => $data['cedula'],
   'estado_civil'                => $data['estado_civil'],
   'telefono'                    => $data['telefono'],
   'direccion'                   => $data['direccion'],
   'nombre_contacto'             => $data['nombre_contacto'],
   'telefono_contacto'           => $data['telefono_contacto'],
   'nombre_telefono_doctor'      => $data['nombre_telefono_doctor'],
   'tratamiento_medico'          => $data['tratamiento_medico'],
   'tratamiento_medico_descp'    => $data['tratamiento_medico_descp'],
   'alergias'                    => $data['alergias'],
   'alergias_descp'              => $data['alergias_descp'],
   'medicamentos_que_toma'       => $data['medicamentos_que_toma'],
   'medicamentos_que_toma_descp' => $data['medicamentos_que_toma_descp'],
   'antibioticos'                => $data['antibioticos'],
   'antibioticos_descp'          => $data['antibioticos_descp'],
   'enfermo_del_corazon'         => $data['enfermo_del_corazon'],
   'enfermo_del_corazon_descp'   => $data['enfermo_del_corazon_descp'],
   'hepatitis'                   => $data['hepatitis'],
   'hepatitis_descp'             => $data['hepatitis_descp'],
   'diabetes'                    => $data['diabetes'],
   'diabetes_descp'              => $data['diabetes_descp'],
   'sifilis'                     => $data['sifilis'],
   'sifilis_descp'               => $data['sifilis_descp'],
   'desmayos'                    => $data['desmayos'],
   'desmayos_descp'              => $data['desmayos_descp'],
   'sangra_mucho'                => $data['sangra_mucho'],
   'sangra_mucho_descp'          => $data['sangra_mucho_descp'],
   'cicratizar_heridas'          => $data['cicratizar_heridas'],
   'cicratizar_heridas_descp'    => $data['cicratizar_heridas_descp'],
   'sida'                        => $data['sida'],
   'sida_descp'                  => $data['sida_descp'],
   'comentarios'                 => $data['comentarios'],

  ]);
  return redirect('/pacientes')->with('message', 'Paciente creado correctamente');

 }

 public function show($id)
 {
  // Busca el paciente en la base de datos
  $patient = Patient::find($id);

  // Si el paciente no existe, retorna un error 404
  if (!$patient) {
   return response()->json(['error' => 'El paciente no existe'], 404);
  }

  // Si el paciente existe, retorna la vista para mostrar los detalles del paciente
  return view('patient.show', ['patient' => $patient]);
 }
}