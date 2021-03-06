<?php

use Migratio\Contract\MigrationContract;
use Migratio\Contract\WizardContract as Wizard;
use Migratio\Contract\SchemaCapsuleContract as Schema;

class RoleCreate implements MigrationContract
{
    /**
     * Run the migrations.
     *
     * @param Schema $schema
     * @return mixed
     */
    public function up(Schema $schema)
    {
        return $schema->create(function(Wizard $wizard){

            $wizard->auto_increment();
            $wizard->name('name')->varchar(255)->index();
            $wizard->name('status')->int()->default(1)->index();
            $wizard->name('is_deleted')->int()->default(0)->index();
            $wizard->name('role_state')->varchar(255)->index();

            $wizard->name('created_at')->timestamp();
            $wizard->name('updated_at')->timestamp();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
