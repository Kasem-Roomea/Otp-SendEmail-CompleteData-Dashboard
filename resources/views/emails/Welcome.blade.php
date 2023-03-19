<style>
    .card {
        max-width: 100%;
        border-radius: 0.5rem;
        background-color: #fff;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        border: 2px solid transparent;
        text-align: center;
    }

    .content {
        padding: 1.1rem;
    }

    .title {
        color: #111827;
        font-size: 1.125rem;
        line-height: 1.75rem;
        font-weight: 600;
        text-align: center;
        border-radius:0.5rem ;
    }

    .desc {
        margin-top: 0.5rem;
        color: #6B7280;
        font-size: 0.875rem;
        line-height: 1.25rem;
        text-align: center;
    }

    .action {
        display: inline-flex;
        margin-top: 1rem;
        color: #ffffff;
        font-size: 0.875rem;
        line-height: 1.25rem;
        font-weight: 500;
        align-items: center;
        gap: 0.25rem;
        background-color: #2563EB;
        padding: 4px 8px;
        border-radius: 4px;
        text-decoration: none;
        text-align: center;
    }

    .action span {
        transition: .3s ease;
        text-align: center;
    }

    .action:hover span {
        transform: translateX(4px);
    }

</style>

<div class="card">

    <div class="card-header" style = 'padding: 0.75rem 1.25rem;margin-bottom: 0;background-color: rgba(0,0,0,.03);
        border-bottom: 1px solid rgba(0,0,0,.125);text-align: center'>
        RS4IT
    </div>

    <div class="content">

      <span class="title">
       Welcome to RS4IT
      </span>

        <p class="desc">
            We sending this email to you to complete your Saudi VIAS entry and travel requirement
        </p>

        <p class="desc">
            Please click on link below
        </p>

        <a href="http://localhost:8000/completeInfo" class="action">
            Go Complete
            <span aria-hidden="true">
        →
      </span>
        </a>
    </div>
</div>

