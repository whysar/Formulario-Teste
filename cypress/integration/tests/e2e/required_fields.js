describe('Required test', function() {
    it('Visits the form', function() {
      cy.visit('http://localhost:8000/')
    })
  
  it('Submit values', function() {
    
    cy.get('input[name="Register"]').click()
    cy.contains('Welcome Teste, we appreciate your feedback.').should('not.exist')

  })
})