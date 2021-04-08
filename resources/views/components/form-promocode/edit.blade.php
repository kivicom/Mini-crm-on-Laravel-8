<!-- Modal -->
<div class="modal fade" id="appealEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавление обращения</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('appeal.edit') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="hidden" class="form-control" name="user_id" id="inputAuthor"
                           value="{{ \Illuminate\Support\Facades\Auth::user()->id }}">
                    <div class="mb-3">
                        <label for="inputTel">Телефон клиента</label>
                        <input type="text" class="phone_number form-control" name="phone_of_client" id="inputTel"
                               placeholder="79999999999" value="">
                        <small id="telHelp" class="form-text text-muted">Номер телефона в формате 79999999999</small>
                    </div>
                    <div class="mb-3">
                        <label for="inputNumAutomat">Номер автомата</label>
                        <input type="text" class="form-control" name="num_automat" id="inputNumAutomat" placeholder=""
                               required>
                    </div>
                    <div class="mb-3">
                        <label for="inputSumPromo">Сумма промокода</label>
                        <input type="number" min="0" max="200" class="form-control" name="sum_promo" id="inputSumPromo"
                               placeholder="максимум 200" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputNotice">Причина создания</label>
                        <input type="text" class="form-control" name="notice" id="inputNotice" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputExpired">Срок дейтсивия кода</label>
                        <input type="date" class="form-control" name="expired" id="inputExpired" placeholder=""
                               required>
                    </div>
                    <div class="mb-3">
                        <label for="inputRandGen">Сгенерированный код</label>
                        <input type="text" class="form-control" name="rand_gen" id="inputRandGen" placeholder="Код генерируется автоматически"
                               value="" readonly required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Cоздать промокод</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
