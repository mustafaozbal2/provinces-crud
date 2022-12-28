<?php
namespace App\Http\Controllers;
use App\Models\iller;
use Illuminate\Http\Request;
class illerController extends Controller
{
      public function index()
    {
$illers = iller::latest()->paginate(15);
return view('pages.crud-data-list-iller', compact('illers'))
      ->with('i', (request()->input('page', 1) - 1) * 15);
      }
    public function create()
    {
      $illerx = iller::all();
      return view('pages.crud-form-iller', compact('illerx'));
    }

    public function store(Request $request)
    {
    $request->validate(['iller' => 'required']);
        iller::create($request->all());
        return redirect()->route('iller.index')
            ->with('success', 'İl ekleme işlemi başarılı.');
    }

    public function show(iller $iller)
    {
      $iller = iller::find($id);
      return view('pages.crud-update-list-iller',compact('iller'));
    }
    public function edit($id)
    {
       $iller = iller::find($id);
       return view('pages.crud-form-illerduzenle',compact('iller'));

    }

    public function update(Request $request, iller $iller)
    {
      $request->validate([
          'iller' => 'required',
      ]);

      $iller->update($request->all());

      return redirect()->route('iller.index')
                      ->with('success','İl başarı ile güncellendi.');
    }

    public function destroy($id)
    {
        iller::destroy($id);
        return redirect()->route('iller.index')->with('success','İl başarı ile silindi');
    }
}
