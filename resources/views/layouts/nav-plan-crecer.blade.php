<?php $currentPath= \Request::route()->getName();?>
<ul class="nav nav-tabs" style="margin-bottom: 20px">
  <li role="presentation" class="{{ in_array($currentPath, ['plan_crecer.entidades.index']) ? 'active' : '' }}"><a href="{{ route('plan_crecer.entidades.index') }}">Soy</a></li>
  <li role="presentation" class="{{ in_array($currentPath, ['plan_crecer.topicos.index','plan_crecer.topicos.create']) ? 'active' : '' }}"><a href="{{ route('plan_crecer.topicos.index') }}">Necesito financiamiento para</a></li>
  <li role="presentation" class="{{ in_array($currentPath, ['plan_crecer.items.index']) ? 'active' : '' }}"><a href="{{ route('plan_crecer.items.index') }}">Quiero financiamiento para</a></li>
</ul>