<ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>portal">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(2) == 'press'? 'active': ''?>">
        <a class="nav-link" href="<?php echo base_url() ?>portal/press">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Press</span></a>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(2) == 'resource'? 'active': ''?>">
        <a class="nav-link" href="<?php echo base_url() ?>portal/resource">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Resources</span></a>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(2) == 'event'? 'active': ''?>">
        <a class="nav-link" href="<?php echo base_url() ?>portal/event">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Events</span></a>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(2) == 'message'? 'active': ''?>">
        <a class="nav-link" href="<?php echo base_url() ?>portal/message">
          <i class="fas fa-fw fa-table"></i>
          <span>Messages</span></a>
      </li>
    </ul>