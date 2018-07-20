<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Finances">
        <a class="nav-link" href="/{$agencyID}/finances">
            <i class="fa fa-fw "></i>
            <span class="nav-link-text">Finances</span>
        </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Missions">
        <a class="nav-link" href="/{$agencyID}/missions">
            <i class="fa fa-fw"></i>
            <span class="nav-link-text">Missions</span>
        </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseHardware" data-parent="#exampleAccordion">
            <span class="nav-link-text">Hardware</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseHardware">
            <li>
                <a href="/{$agencyID}/newsat">Build new Satellite</a>
            </li>
            <li>
                <a href="/{$agencyID}/newlsl">Build new Space launch system</a>
            </li>
        </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Contracts">
        <a class="nav-link" href="/{$agencyID}/contracts">
            <i class="fa fa-fw"></i>
            <span class="nav-link-text">Contracts</span>
        </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Locations">
        <a class="nav-link" href="/{$agencyID}/locations">
            <i class="fa fa-fw"></i>
            <span class="nav-link-text">Locations</span>
        </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Transport">
        <a class="nav-link" href="/{$agencyID}/logistic">
            <i class="fa fa-fw"></i>
            <span class="nav-link-text">Logistic</span>
        </a>
    </li>
    {*<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
                <a href="#">Second Level Item</a>
            </li>
            <li>
                <a href="#">Second Level Item</a>
            </li>
            <li>
                <a href="#">Second Level Item</a>
            </li>
            <li>
                <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                <ul class="sidenav-third-level collapse" id="collapseMulti2">
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>*}
</ul>