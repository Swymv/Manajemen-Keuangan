class Anggaran extends Model
{
protected $fillable = ['user_id','kategori','total','terpakai'];
public function user() { return $this->belongsTo(User::class); }
}