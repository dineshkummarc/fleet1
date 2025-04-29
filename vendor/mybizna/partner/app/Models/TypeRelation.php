<?php
namespace Modules\Partner\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Models\BaseModel;
use Modules\Partner\Models\Partner;
use Modules\Partner\Models\Type;

class TypeRelation extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['partner_id', 'partner_types_id'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "partner_type_relation";

    /**
     * Add relationship to Partner
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }

    /**
     * Add relationship to PartnerType
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partnerType(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function migration(Blueprint $table): void
    {

        $table->unsignedBigInteger('partner_id')->nullable();
        $table->unsignedBigInteger('partner_types_id')->nullable();
    }

    public function post_migration(Blueprint $table): void
    {
        $table->foreign('partner_id')->references('id')->on('partner_partner')->onDelete('set null');
        $table->foreign('partner_types_id')->references('id')->on('partner_type')->onDelete('set null');
    }
}
