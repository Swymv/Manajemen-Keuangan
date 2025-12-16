class Target extends Model
{
protected $fillable = ['user_id','nama_target','target_nominal','terkumpul'];
public function user() { return $this->belongsTo(User::class); }
}