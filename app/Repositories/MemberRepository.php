<?php

namespace Emedia\Repositories;

use Emedia\Models\Member;

class MemberRepository extends EloquentRepository{
	public function getModel(): string {
		return Member::class;
	}
}
